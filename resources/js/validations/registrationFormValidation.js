export const formValidation = (formData) => {
    let errors = [];
    Object.entries(formData).forEach(entry => {
        const [key, value] = entry;
        const inputField = document.getElementById(key);

        try {
            if (value == '' && key !== 'phone_number') {
                inputField.setAttribute('class', 'error-border');
                throw 'This field is required';
            } else {
                inputField.removeAttribute('class');
            }
        } catch (error) {
            errors.push(error)
            inputField.parentNode.lastElementChild.innerHTML = error
        }
    });
    return errors.length;
}

export const validateOnInput = (arg, passwordValue) => {
    const value = arg.target.value;
    const target = arg.target;
    const containsNumber = /\d/.test(arg.target.value);
    const validEmail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(arg.target.value);

    if (target.id == 'full_name') {
        if (value == '') {
            checkValue(target)
        } else if (value !== '' && !containsNumber) {
            target.removeAttribute('class')
            target.parentNode.lastElementChild.innerHTML = ''
        }
        if (containsNumber) {
            invalidValue(target, 'Invalid name')
        }
    }

    if (target.id == 'email') {
        if (value == '') {
            checkValue(target)
        } else if (value !== '' && validEmail) {
            target.removeAttribute('class')
            target.parentNode.lastElementChild.innerHTML = ''
        }
        if (value !== '' && !validEmail) {
            invalidValue(target, 'Invalid email address')
        }
    }

    if (target.id == 'password') {
        if (value == '') {
            checkValue(target)
        } else if (value !== '') {
            target.removeAttribute('class')
            target.parentNode.lastElementChild.innerHTML = ''
        }
    }
    if (target.id == 'password_confirmation') {
        if (value !== passwordValue) {
            invalidValue(target, "Password doesn't match")
        } else {
            target.removeAttribute('class')
            target.parentNode.lastElementChild.innerHTML = ''
        }
    }
}

const checkValue = (target) => {
    target.setAttribute('class', 'error-border')
    target.parentNode.lastElementChild.innerHTML = 'This field is required'
}

const invalidValue = (target, errorMessage) => {
    target.setAttribute('class', 'error-border')
    target.parentNode.lastElementChild.innerHTML = errorMessage
}
