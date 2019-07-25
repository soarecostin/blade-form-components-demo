@form('open')

    @form('input', ['name' => 'id', 'disabled' => true, 'value' => 1])
    
    @form('input', ['name' => 'name', 'required' => true, 'placeholder' => 'John Doe'])
    
    @form('password', ['name' => 'password', 'required' => true, 'help' => 'Minimum 6 characters'])
    
    @form('email', ['name' => 'email', 'required' => true, 'placeholder' => 'john.doe@gmail.com'])

    @form('input', ['name' => 'price', 'class' => 'is-rounded is-expanded', 'required' => true,
        'addons' => $priceAddons,
    ])

    @form('textarea', ['name' => 'message', 'rows' => 6])

    @form('select', [
        'name' => 'language',
        'label' => 'Language',
        'options' => [
            'en' => 'English',
            'fr' => 'French'
        ],
        'nulloption' => 'Please select',
    ])

    @form('checkbox', ['name' => 'terms', 'label' => 'I agree to the Terms and Conditions'])

    @form('submit', ['name' => 'Submit', 'class' => 'is-warning'])

@form('close')