function loadBloods(id) {
    var bloods = ['A+', 'A-', 'B+', 'B-', 'AB+', 'AB-', 'O+', 'O-']
    var option = null;
    var select = document.getElementById(id)

    for (var i = 0; i < bloods.length; i++) {
        option = document.createElement('option')
        option.setAttribute('value', bloods[i])
        option.insertAdjacentText('afterbegin', bloods[i])
        select.appendChild(option)
    }
}

function loadStates(id) {
    var states = [
        'AC',
        'AL',
        'AP',
        'AM',
        'BA',
        'CE',
        'DF',
        'ES',
        'GO',
        'MA',
        'MT',
        'MS',
        'MG',
        'PA',
        'PB',
        'PR',
        'PE',
        'PI',
        'RJ',
        'RN',
        'RS',
        'RO',
        'RR',
        'SC',
        'SP',
        'SE',
        'TO'
    ]
    var option = null

    var select = document.getElementById(id)
    for (var i = 0; i < states.length; i++) {
        option = document.createElement('option')
        option.setAttribute('value', states[i])
        option.insertAdjacentText('afterbegin', states[i])
        select.appendChild(option)
    }
}

function loadCities(uf) {
    
}

function validatePartner(form) {
    var cnpj = form.elements['cnpj'].value
    var pass = form.elements['pass'].value

    $.ajax({
        url: '/api/partner',
        type: 'POST',
        dataType: 'JSON',
        data: {
            cnpj: cnpj,
            pass: pass
        },
        success: (response) => {
            if (response == true) {
                alert('Parceiro não encontrado!')
            } else if (response == false) {
                alert('Senha inválida.')
            } else {
                showForm(response, form)
            }
        }
    })

    return false
}

function showForm(name, showName) {
    var hiddenForm = document.getElementById('hiddenForm')
    if (showName) {
        hiddenForm.elements['name'].value = name
    }
    hiddenForm.display = 'block'
}

function login(form) {
    $.ajax({
        url: '/login',
        type: 'POST',
        dataType: 'JSON',
        data: {
            user: form.elements['user'].value,
            pass: form.elements['pass'].value
        },
        success: (response) => {
            window.location.href = '/timeline'
        }
    })

    return false
}

function register() {
    return false
}