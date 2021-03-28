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