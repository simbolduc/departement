let body = document.getElementsByTagName('body')[0]

// Check if there's a theme cookie saved
const value = `; ${document.cookie}`
const parts = value.split(`; dark=`)
let present = parts[1].split(';').shift()
if (present == "false")
    body.classList.remove('dark')

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