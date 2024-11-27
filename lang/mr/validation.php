<?php

declare(strict_types=1);

return [
    'accepted'             => ':Attribute ला स्वीकार केला गेला पाहिजे.',
    'accepted_if'          => ':Other हे :value असेल तेव्हा हे :attribute स्वीकारणे आवश्यक आहे.',
    'active_url'           => ':Attribute हा एक बरोबर URL नाही आहे.',
    'after'                => ':Attribute, :date नंतरची एक तारीख पाहिजे.',
    'after_or_equal'       => ':Attribute, :date हि किंवा त्या नंतरची एक तारीख पाहिजे.',
    'alpha'                => ':Attribute मध्ये फक्त अक्षरे वैध आहेत.',
    'alpha_dash'           => ':Attribute मध्ये फक्त अक्षरे, संख्या आणि डॅश वैध आहेत.',
    'alpha_num'            => ':Attribute मध्ये फक्त अक्षरे आणि संख्या वैध आहेत.',
    'array'                => ':Attribute साठी फक्त सूची वैध आहे.',
    'ascii'                => ':Attribute मध्ये फक्त सिंगल-बाइट अल्फान्यूमेरिक वर्ण आणि चिन्हे असणे आवश्यक आहे.',
    'before'               => ':Attribute, :date आधीची एक तारीख पाहिजे.',
    'before_or_equal'      => ':Attribute, :date हि किंवा त्या आधीची एक तारीख पाहिजे.',
    'between'              => [
        'array'   => ':Attribute, :min किंवा :max संख्या यामध्ये असावी.',
        'file'    => ':Attribute, :min किंवा :max किलोबाइट यामध्ये असावी.',
        'numeric' => ':Attribute, :min किंवा :max यामध्ये असावी.',
        'string'  => ':Attribute, :min किंवा :max शब्द यामध्ये असावी.',
    ],
    'boolean'              => ':Attribute फील्ड योग्य किंवा चुकीचे असावे.',
    'can'                  => ':Attribute फील्डमध्ये अनधिकृत मूल्य आहे.',
    'confirmed'            => ':Attribute पुष्टीकरण जुळत नाही.',
    'contains'             => 'The :attribute field is missing a required value.',
    'current_password'     => 'संकेतशब्द चुकीचा आहे.',
    'date'                 => ':Attribute वैध तारीख नाही.',
    'date_equals'          => ':Attribute, :date तारीख समान असणे आवश्यक आहे.',
    'date_format'          => ':Attribute फॉर्मेट :format शी जुळत नाही.',
    'decimal'              => ':Attribute मध्ये :decimal दशांश स्थाने असणे आवश्यक आहे.',
    'declined'             => ':Attribute नाकारणे आवश्यक आहे.',
    'declined_if'          => ':Other :value असताना :attribute नाकारणे आवश्यक आहे.',
    'different'            => ':Attribute आणि :other वेगळे असावे.',
    'digits'               => ':Attribute, :digits अंक असणे आवश्यक आहे.',
    'digits_between'       => ':Attribute, :min आणि :max अंक दरम्यान असणे आवश्यक आहे.',
    'dimensions'           => ':Attribute अयोग्य माप आहे.',
    'distinct'             => ':Attribute वेगवेगळे असावेत.',
    'doesnt_end_with'      => ':Attribute खालीलपैकी एकाने संपू शकत नाही: :values.',
    'doesnt_start_with'    => ':Attribute खालीलपैकी एकाने सुरू होऊ शकत नाही: :values.',
    'email'                => ':Attribute एक वैध ईमेल पत्ता असणे आवश्यक आहे.',
    'ends_with'            => ':Attribute खालील एक समाप्त करणे आवश्यक आहे: :values.',
    'enum'                 => 'निवडलेले :attribute अवैध आहे.',
    'exists'               => 'निवडलेेलेे :attribute वैध नाही.',
    'extensions'           => ':attribute फील्डमध्ये खालीलपैकी एक विस्तार असणे आवश्यक आहे: :values.',
    'file'                 => ':Attribute एक फ़ाइल असावी.',
    'filled'               => ':Attribute फील्ड आवश्यक आहे.',
    'gt'                   => [
        'array'   => ':Attribute, :value संख्या पेक्षा जास्त असावी.',
        'file'    => ':Attribute, :value किलो बाईट पेक्षा जास्त असावी.',
        'numeric' => ':Attribute, :value पेक्षा जास्त असावी.',
        'string'  => ':Attribute, :value characters पेक्षा जास्त असावी.',
    ],
    'gte'                  => [
        'array'   => ':Attribute, :value संख्या पेक्षा मोठे किंवा समान असणे आवश्यक आहे.',
        'file'    => ':Attribute, :value किलोबाईट पेक्षा मोठे किंवा समान असणे आवश्यक आहे.',
        'numeric' => ':Attribute, :value पेक्षा मोठे किंवा समान असणे आवश्यक आहे.',
        'string'  => ':Attribute, :value शब्दांपेक्षा मोठे किंवा समान असणे आवश्यक आहे.',
    ],
    'hex_color'            => ':attribute फील्ड वैध हेक्साडेसिमल रंग असणे आवश्यक आहे.',
    'image'                => ':Attribute एक प्रतिमा असावी.',
    'in'                   => ':Attribute अमान्य आहे.',
    'in_array'             => ':Attribute फील्ड, :other अस्तित्वात नाही.',
    'integer'              => ':Attribute एक पूर्णांक असणे आवश्यक आहे.',
    'ip'                   => ':Attribute एक वैध IP address असावा.',
    'ipv4'                 => ':Attribute एक वैध IPv4 address असावा.',
    'ipv6'                 => ':Attribute एक वैध IPv6 address असावा.',
    'json'                 => ':Attribute एक वैध JSON स्ट्रिंग असावा.',
    'list'                 => ':attribute फील्ड एक सूची असणे आवश्यक आहे.',
    'lowercase'            => ':Attribute लोअरकेस असणे आवश्यक आहे.',
    'lt'                   => [
        'array'   => ':Attribute, :value संख्या पेक्षा कमी असावी.',
        'file'    => ':Attribute, :value किलो बाईट पेक्षा कमी असावी.',
        'numeric' => ':Attribute, :value पेक्षा कमी असावी.',
        'string'  => ':Attribute, :value वर्णांपेक्षा पेक्षा कमी असावी.',
    ],
    'lte'                  => [
        'array'   => ':Attribute, :value संख्या पेक्षा कमी किंवा समान असणे आवश्यक आहे.',
        'file'    => ':Attribute, :value किलोबाईट पेक्षा कमी किंवा समान असणे आवश्यक आहे.',
        'numeric' => ':Attribute, :value पेक्षा कमी किंवा समान असणे आवश्यक आहे.',
        'string'  => ':Attribute, :value शब्दांपेक्षा कमी किंवा समान असणे आवश्यक आहे.',
    ],
    'mac_address'          => ':Attribute हा वैध MAC पत्ता असणे आवश्यक आहे.',
    'max'                  => [
        'array'   => ':Attribute, :value संख्या पेक्षा कमी असणे आवश्यक आहे.',
        'file'    => ':Attribute, :value किलोबाईट पेक्षा कमी असणे आवश्यक आहे.',
        'numeric' => ':Attribute, :value पेक्षा कमी असणे आवश्यक आहे.',
        'string'  => ':Attribute, :value शब्दांपेक्षा कमी असणे आवश्यक आहे.',
    ],
    'max_digits'           => ':Attribute मध्ये :max पेक्षा जास्त अंक नसावेत.',
    'mimes'                => ':Attribute एक प्रकार ची फ़ाइल: :values असावी.',
    'mimetypes'            => ':Attribute एक प्रकार ची फ़ाइल: :values असावी.',
    'min'                  => [
        'array'   => ':Attribute कमीत कमी :min आइटम असावी.',
        'file'    => ':Attribute कमीत कमी :min किलोबाइट असावी.',
        'numeric' => ':Attribute कमीत कमी :min असावी.',
        'string'  => ':Attribute कमीत कमी :min शब्द असावी.',
    ],
    'min_digits'           => ':Attribute मध्ये किमान :min अंक असणे आवश्यक आहे.',
    'missing'              => ':Attribute फील्ड गहाळ असणे आवश्यक आहे.',
    'missing_if'           => ':Other :value असताना :attribute फील्ड गहाळ असणे आवश्यक आहे.',
    'missing_unless'       => ':Other :value असल्याशिवाय :attribute फील्ड गहाळ असणे आवश्यक आहे.',
    'missing_with'         => ':Values उपस्थित असताना :attribute फील्ड गहाळ असणे आवश्यक आहे.',
    'missing_with_all'     => ':Values उपस्थित असताना :attribute फील्ड गहाळ असणे आवश्यक आहे.',
    'multiple_of'          => 'द :attribute अनेक असणे आवश्यक आहे :value',
    'not_in'               => 'घेतलेला :attribute वैध नाही.',
    'not_regex'            => ':Attribute प्रारूप वैध नाही.',
    'numeric'              => ':Attribute एक संख्या असावी.',
    'password'             => [
        'letters'       => ':Attribute मध्ये किमान एक अक्षर असणे आवश्यक आहे.',
        'mixed'         => ':Attribute मध्ये किमान एक अप्परकेस आणि एक लोअरकेस अक्षर असणे आवश्यक आहे.',
        'numbers'       => ':Attribute मध्ये किमान एक संख्या असणे आवश्यक आहे.',
        'symbols'       => ':Attribute मध्ये किमान एक चिन्ह असणे आवश्यक आहे.',
        'uncompromised' => 'दिलेला :attribute डेटा लीकमध्ये दिसला आहे. कृपया भिन्न :attribute निवडा.',
    ],
    'present'              => ':Attribute फील्ड उपस्थित असावी.',
    'present_if'           => ':other :value असताना :attribute फील्ड उपस्थित असणे आवश्यक आहे.',
    'present_unless'       => ':other :value असल्याशिवाय :attribute फील्ड उपस्थित असणे आवश्यक आहे.',
    'present_with'         => ':values उपस्थित असताना :attribute फील्ड उपस्थित असणे आवश्यक आहे.',
    'present_with_all'     => ':values उपस्थित असताना :attribute फील्ड उपस्थित असणे आवश्यक आहे.',
    'prohibited'           => ':Attribute फील्ड प्रतिबंधित आहे.',
    'prohibited_if'        => 'इ. स.:attribute फील्ड :other :value असते तेव्हा प्रतिबंधित आहे.',
    'prohibited_unless'    => 'अगोदर निर्देश केलेल्या बाबीसंबंधी बोलताना :attribute क्षेत्रात प्रतिबंधित आहे :other :values आहे तोपर्यंत.',
    'prohibits'            => ':Attribute फील्ड :other ला उपस्थित राहण्यास प्रतिबंधित करते.',
    'regex'                => ':Attribute फॉर्मेट वैध नाही.',
    'required'             => ':Attribute फील्ड आवश्यक आहे.',
    'required_array_keys'  => ':Attribute फील्डमध्ये :values साठीच्या नोंदी असणे आवश्यक आहे.',
    'required_if'          => 'जर :other :value असेल तर :attribute फ़ील्ड आवश्यक आहे.',
    'required_if_accepted' => ':Other स्वीकारल्यावर :attribute फील्ड आवश्यक आहे.',
    'required_if_declined' => 'The :attribute field is required when :other is declined.',
    'required_unless'      => 'जर :other :value नसेल तर :attribute फ़ील्ड आवश्यक आहे.',
    'required_with'        => ':Values सोबत :attribute  फ़ील्ड आवश्यक आहे.',
    'required_with_all'    => 'सर्व :values सोबत :attribute फ़ील्ड आवश्यक आहे.',
    'required_without'     => ':Values खेरीज :attribute  फ़ील्ड आवश्यक आहे.',
    'required_without_all' => 'सर्व :values खेरीज :attribute  फ़ील्ड आवश्यक आहे.',
    'same'                 => ':Attribute आणि :other सामान असावेत.',
    'size'                 => [
        'array'   => ':Attribute में :size आइटम असावी.',
        'file'    => ':Attribute, :size किलोबाइट असावी.',
        'numeric' => ':Attribute, :size असावी.',
        'string'  => ':Attribute, :size शब्द असावी.',
    ],
    'starts_with'          => ':Attribute खालीलपैकी कोणत्याही अक्षराने सुरूवात करावी: :values',
    'string'               => ':Attribute एक वाक्य असावे.',
    'timezone'             => ':Attribute एक वेळ क्षेत्र असावे.',
    'ulid'                 => ':Attribute एक वैध ULID असणे आवश्यक आहे.',
    'unique'               => ':Attribute आधी वापरले गेले आहे.',
    'uploaded'             => ':Attribute अपलोड करण्यात अयशस्वी.',
    'uppercase'            => ':Attribute अप्परकेस असणे आवश्यक आहे.',
    'url'                  => ':Attribute फॉर्मेट अमान्य आहे.',
    'uuid'                 => ':Attribute एक वैध UUID असावी.',
];