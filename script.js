document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('transaction-form');
    const transactionList = document.getElementById('transactions');
    const totalElement = document.getElementById('total');

    let totalAmount = 0;

    form.addEventListener('submit', function(event) {
        event.preventDefault();

        const type = form.type.value;
        const description = form.description.value;
        const amount = parseFloat(form.amount.value);

        if (!type || !description || isNaN(amount)) {
            alert('Por favor, preencha todos os campos corretamente.');
            return;
        }

        // Adiciona o valor da nova transação ao total
        if (type === 'entrada') {
            totalAmount += amount;
        } else {
            totalAmount -= amount;
        }

        // Atualiza o elemento HTML que exibe o total
        totalElement.textContent = `Total: R$ ${totalAmount.toFixed(2)}`;

        const transactionItem = document.createElement('li');
        transactionItem.textContent = `${type.toUpperCase()} - ${description} - R$ ${amount.toFixed(2)}`;
        transactionList.appendChild(transactionItem);

        form.reset();
    });
});
