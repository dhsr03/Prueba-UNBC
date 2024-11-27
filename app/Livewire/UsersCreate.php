<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Mail\Message;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Password;
use Illuminate\Validation\Rule;

class UsersCreate extends Component
{
    use CanResetPassword;
    public ?string $action = null;
    public $roles;
    public $user;
    public bool $status=true;
    public $username, $firstName, $lastName, $phone, $email, $role, $rut;
    public function toggleStatus()
{
    $this->status = !$this->status;
}


    

    public function rules()
    {
        $rules = [
            'firstName' => ['required', 'string'],
            'lastName' => ['required', 'string'],
            'email' => ['required', 'email', 'regex:/@.+\..+/i'],
            'phone' => ['required', 'numeric'],
        ];

        return $rules;
    }

    public function mount($id = null)
    {
        if ($id) {
            $this->action = 'edit';
            $this->user = User::find($id);
            $this->firstName = $this->user->name;
            $this->lastName = $this->user->last_name;
            $this->email = $this->user->email;
            $this->phone = $this->user->phone;
            $this->status = $this->user->is_active;
            $this->role = $this->user->getRoleNames()->first();
        }
        $this->roles = Role::all();
    }

    #[Layout('layouts.app')]
    public function render()
    {
        return view('livewire.users-create');
    }
    
    public function save()
    {
        $this->validate();

        // Asignar siempre el rol de 'Administrador'
        $role = 'Administrador';

        if ($this->action != 'edit') {
            // Crear nuevo usuario
            $user = User::create([
                'name' => $this->firstName,
                'last_name' => $this->lastName,
                'email' => $this->email,
                'password' => $this->generatePasword(),
                'phone' => $this->phone,
                'is_active' => $this->status
            ]);

            // Asignar siempre el rol de 'Administrador'
            $user->assignRole($role);
            $user->sendPasswordResetNotification(Password::createToken($user), 'create-user');

            session()->flash('notification', [
                'type' => 'success',
                'message' => 'Usuario creado exitosamente!'
            ]);
        } else {
            // Editar usuario existente
            $this->user->update([
                'name' => $this->firstName,
                'last_name' => $this->lastName,
                'email' => $this->email,
                'phone' => $this->phone,
                'is_active' => $this->status,
            ]);

            // Asignar siempre el rol de 'Administrador'
            $this->user->syncRoles([$role]);

            // Notificación de éxito para edición
            session()->flash('notification', [
                'type' => 'success',
                'message' => 'Usuario actualizado exitosamente!'
            ]);
        }
        
        // Redirigir a la tabla de usuarios
        $this->redirectRoute('user.table');        
    }

    private function generatePasword()
    {
        $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
        $length = 8;
        $password = '';

        for ($i = 0; $i < $length; $i++) {
            $index = rand(0, strlen($characters) - 1);
            $password .= $characters[$index];
        }

        return bcrypt($password);
    }
}