function show(ids = []) {
    if (ids.length > 0) {
        for (var i = 0; i < ids.length; i++) {
            document.getElementById(ids[i]).style.display = 'flex'
        }
    }
}

function hide(ids = []) {
    if (ids.length > 0) {
        for (var i = 0; i < ids.length; i++) {
            document.getElementById(ids[i]).remove()
        }
    }
}
