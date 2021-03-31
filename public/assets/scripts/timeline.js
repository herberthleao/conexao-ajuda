function loadActions(id, limit = 0) {
    $.ajax({
        url: '/api/actions',
        type: 'POST',
        data: {
            limit: limit
        },
        dataType: 'JSON',
        success: (response) => {
            createCards(id, response)
        }
    })
}

function createCards(id, data) {
    var parent = document.getElementById(id)

    var col = null
    var card = null
    var body = null
    var type = null
    var location = null
    var title = null
    var subtitle = null
    var text = null
    var date = null
    var button = null

    var buttonTitle = ''

    parent.innerHTML = ''

    if (data.length > 0) {
        for (var i = 0; i < data.length; i++) {
            col = document.createElement('div')
            col.setAttribute('class', 'col-4')

            card = document.createElement('div')
            card.setAttribute('class', 'cnx-section-card card')

            body = document.createElement('div')
            body.setAttribute('class', 'card-body')

            type = document.createElement('span')
            type.setAttribute('class', 'text-muted mb-2')
            type.insertAdjacentText('afterbegin', data[i].type)

            location = document.createElement('span')
            location.setAttribute('class', 'text-muted mb-2 float-end')
            location.insertAdjacentText(
                'afterbegin', data[i].location
            )

            title = document.createElement('h5')
            title.setAttribute('class', 'card-title mt-2')
            title.insertAdjacentText('afterbegin', data[i].name)

            subtitle = document.createElement('h6')
            subtitle.setAttribute(
                'class', 'card-subtitle text-muted mb-2'
            )
            subtitle.insertAdjacentText(
                'afterbegin', data[i].institution
            )

            text = document.createElement('p')
            text.setAttribute('class', 'card-text')
            text.insertAdjacentText(
                'afterbegin', data[i].description
            )

            date = document.createElement('span')
            date.setAttribute('class', 'text-muted')
            date.insertAdjacentText('afterbegin', data[i].date)

            buttonTitle = (id == 'timeline')
                ? 'Candidatar'
                : 'Contribuir';
            button = document.createElement('a')
            button.setAttribute('class', 'btn')
            button.setAttribute('href', '/login')
            button.insertAdjacentText('afterbegin', buttonTitle)

            body.appendChild(type)
            body.appendChild(location)
            body.appendChild(title)
            body.appendChild(subtitle)
            body.appendChild(text)
            body.appendChild(date)
            body.appendChild(button)
            card.appendChild(body)
            col.appendChild(card)
            parent.appendChild(col)
        }
    }
}