function search(form) {
    var keywords = form.elements['keywords'].value

    $.ajax({
        url: '/api/search',
        type: 'POST',
        data: {
            keywords: keywords
        },
        dataType: 'JSON',
        success: (response) => {
            if (response.length > 0) {
                createCards('timeline', response)
            } else {
                alert('Nenhuma ação foi encontrada!')
            }
        }
    })

    return false
}