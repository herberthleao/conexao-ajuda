function loadActions() {
    $.ajax({
        url: '/api/actions',
        type: 'GET',
        dataType: 'JSON',
        success: (response) => {
            if (response.length > 0) {

            }
        }
    })
}