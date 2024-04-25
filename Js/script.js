window.onload = function() {
    if (document.getElementById('quote')) {
        const quotes = [
            { text: "Drink plenty of fluids", color: "#bde0fe" },
            { text: "Maintain a healthy body weight", color: "#a6d6d6" },
            { text: "Get on the move, make it a habit!", color: "#f6f4d2" },
            { text: "Start now! And keep changing gradually.", color: "#c8d5b9" }
        ];

        let quoteDiv = document.getElementById('quote');

        function changeQuote() {
            let randomIndex = Math.floor(Math.random() * quotes.length);
            let quote = quotes[randomIndex];
            quoteDiv.innerText = quote.text;
            quoteDiv.style.backgroundColor = quote.color;
            quoteDiv.classList.add('animate');

            setTimeout(() => {
                quoteDiv.classList.remove('animate');
            }, 500);
        }

        changeQuote();
        setInterval(changeQuote, 5000);
    
    }else if (document.getElementById('registrationForm')) {
        const registrationForm = document.getElementById('registrationForm');

        registrationForm.addEventListener('submit', function(event) {
            event.preventDefault();

            const name = document.getElementById('name').value;
            const email = document.getElementById('email').value;
            const contact = document.getElementById('contact').value;
            const password = document.getElementById('password').value;
            const plan1 = document.getElementById('plan1').value;
            const p1 = document.getElementById('p1').value;
            const p2 = document.getElementById('p2').value;
            const p3 = document.getElementById('p3').value;
            const p4 = document.getElementById('p4').value;
            const confirmPassword = document.getElementById('confirmPassword').value;
            

            if (password !== confirmPassword) {
                alert('Passwords do not match');
                return;
            }
            else{
                registrationForm.submit();
            }

            // Here you can handle the registration logic (e.g., send the data to a server)
            console.log(`Registered with name: ${name}, email: ${email}, contact: ${contact}, plan: ${plan1}, p1: ${p1}, p2: ${p2}, p3: ${p3}, p4: ${p4}`);
        });
    }else if (document.getElementById('mealShareForm')) {
    const mealShareForm = document.getElementById('mealShareForm');
    const peopleCountInput = document.getElementById('peopleCount');
    const nicknamesDiv = document.getElementById('nicknames');

    peopleCountInput.addEventListener('input', function() {
        const peopleCount = parseInt(this.value, 10);
        nicknamesDiv.innerHTML = ''; // Clear existing nickname fields

        for (let i = 0; i < peopleCount; i++) {
            const personInput = document.createElement('input');
            personInput.type = 'text';
            personInput.placeholder = `Person ${i + 1}`;
            nicknamesDiv.appendChild(personInput);
        }
    });

    mealShareForm.addEventListener('submit', function(event) {
        console.log('Form submit event triggered');
        event.preventDefault();
    
        const peopleCount = peopleCountInput.value;
        const persons = Array.from(nicknamesDiv.children).map(input => input.value);
    
        // Send an AJAX request to the PHP script
        fetch('create_table.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
            },
            body: JSON.stringify({ peopleCount, persons }),
        })
        .then(response => response.text())
        .then(data => console.log(data))
        .catch((error) => {
            console.error('Error:', error);
        });
    });
}else if (document.getElementById('expensesTable')) {
        const expensesTable = document.getElementById('expensesTable');
    
        expensesTable.addEventListener('change', function(event) {
            if (event.target.tagName === 'INPUT') {
                const row = event.target.parentElement.parentElement;
                const person = row.children[0].textContent;
                const item = row.children[1].children[0].value;
                const amount = row.children[2].children[0].value;
    
                console.log(`Person: ${person}, Item: ${item}, Amount: ${amount}`);
            }
        });
    }else if (document.getElementById('expenseForm')) {
        const expenseForm = document.getElementById('expenseForm');
        const expensesTable = document.getElementById('expensesTable');
    
        expenseForm.addEventListener('submit', function(event) {
            event.preventDefault();
    
            const person = document.getElementById('person').value;
            const item = document.getElementById('item').value;
            const amount = document.getElementById('amount').value;
    
            console.log(`Person: ${person}, Item: ${item}, Amount: ${amount}`);
    
            // TODO: Add the expense to the table
        });
    } if (document.getElementById('historyTable')) {
        const historyTable = document.querySelector('#historyTable tbody');

        const observer = new MutationObserver(function() {
            const rows = historyTable.getElementsByTagName('tr');

            for (let i = 0; i < rows.length; i++) {
                rows[i].className = ''; // Remove existing color classes
                rows[i].classList.add(`color${i % 5}`); // Add new color class
            }
        });

        observer.observe(historyTable, { childList: true });
    }
}