function search(form) {
    var keywords = form.names['']
    $.ajax({
        url: '/api/actions',
        type: 'POST',
        data: {
            keywords: keywords
        }
    });

    return false;
}