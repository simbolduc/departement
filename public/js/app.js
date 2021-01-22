let body = document.getElementsByTagName('body')[0]

// Check if there's a theme cookie saved
const value = `; ${document.cookie}`
const parts = value.split(`; dark=`)
if (parts.length === 2) {
    let present = parts.pop().split(';').shift()
    if (present == "true")
        body.classList.add('dark')
}

// Theme toggling using buttons
const btn = document.getElementsByClassName('theme-toggle')
for(let i = 0; i < btn.length; i++) {
    btn[i].addEventListener('click', () => {
        if(body.classList.contains('dark'))
            body.classList.remove('dark')
        else body.classList.add('dark')

        document.cookie = "dark=" + body.classList.contains('dark')
    })
}