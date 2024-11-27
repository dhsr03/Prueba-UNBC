<?php
    
namespace App\Livewire;

use Livewire\Component;
use App\Models\User;
use Livewire\Attributes\Layout;
use Livewire\WithPagination;

class UsersTable extends Component
{
    use WithPagination;
    public string $search = '';
    public int $cant = 5;
    public $showConfirmationModal = false;
    public $deletingUserId;

    #[Layout('layouts.app')]
    public function render()
    {
        $users = User::search($this->search)->paginate($this->cant);

        return view('livewire.users-table', [
            'users' => $users
        ]);

    }

    public function deleteUser()
    {
        $userId = $this->deletingUserId;
            User::where('id', $userId)->delete();
            $this->showConfirmationModal = false;
            $this->deletingUserId = null;

            session()->flash('notification', [
                'type' => 'success',
                'message' => 'Usuario eliminado exitosamente!'
            ]);

        $this->redirectRoute('user.table');
    }

    public function confirmUserDeletion($userId)
    {
        $this->deletingUserId = $userId;
        $this->showConfirmationModal = true;
    }

}