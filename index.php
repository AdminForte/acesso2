<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fortetrator Admin Dashboard</title>
    <!-- ======= Styles ====== -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <!-- =============== Navigation ================ -->
    <div class="container">
        <div class="navigation">
            <ul>
                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="logo-apple"></ion-icon>
                        </span>
                        <span class="title">Forte Trator</span>
                    </a>
                </li>

                <li>
                    <a href="index.html">
                        <span class="icon">
                            <ion-icon name="home-outline"></ion-icon>
                        </span>
                        <span class="title">Dashboard</span>
                    </a>
                </li>
                <li>
                    <li>
                        <a href="ControleFinanceiro.html">
                            <span class="icon">
                                <ion-icon name="arrow-forward-outline"></ion-icon> <!-- Ícone para indicar que é um link -->
                            </span>
                            <span class="title">Formulário</span>
                        </a>
                    </li>
                    

                <li>
                    <a href="https://wa.me/5594999792184">
                        <span class="icon">
                            <ion-icon name="settings-outline"></ion-icon>
                        </span>
                        <span class="title">Configuraçoes</span>
                    </a>
                </li>
            </ul>
        </div>

        <!-- ========================= Main ==================== -->
        <div class="main">
            <div class="topbar">
                <div class="toggle">
                    <ion-icon name="menu-outline"></ion-icon>
                </div>

                <div class="search">
                    <label>
                        <input type="text" placeholder="Search here">
                        <ion-icon name="search-outline"></ion-icon>
                    </label>
                </div>

                <div class="user">
                    <img src="assets/imgs/customer01.jpg" alt="">
                </div>
            </div>

            <!-- ======================= Cards ================== -->
            <div class="cardBox">
                <div class="card">
                    <div>
                        <div class="numbers">0.00</div>
                        <div class="cardName">Daily Views</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="eye-outline"></ion-icon>
                    </div>
                </div>

                <div class="card">
                    <div>
                        <div class="numbers">0</div>
                        <div class="cardName">Entrada</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="cash-outline"></ion-icon>
                    </div>
                </div>

                <div class="card">
                    <div>
                        <div class="numbers">0</div>
                        <div class="cardName">Saida</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="cash-outline"></ion-icon>
                    </div>
                </div>

                <div class="card">
                    <div>
                        <div class="numbers">$7,842</div>
                        <div class="cardName">Saldo Total</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="cash-outline"></ion-icon>
                    </div>
                </div>
            </div>

            <!-- ================ Order Details List ================= -->
            <div class="details">
                <div class="recentOrders">
                    <div class="cardHeader">
                        <h2>Ordens Recentes</h2>
                        <a href="#" class="btn">Atualizar</a>
                    </div>
                    
                    <table>
                        <thead>
                            <tr>
                                <td>Nome</td>
                                <td>Valor</td>
                                <td>Descrição</td>
                                <td>Status</td>
                            </tr>
                        </thead>
                        <?php 
                       $Nome = $_POST [ 'Nome'];
                       $Descrição = $_POST [ 'Descrição']; 
                       $Valor = $_POST [ 'Valor']; 
                       $Tipo = $_POST [ 'Tipo'];

                       echo '<b>Nome:</b>'   '$nome' <br>';
                        echo '<b>Descrição:</b>'  '$descrição' <br>';
                            echo '<b>Valor:<b>'   '$valor' <br>';
                                
                       </?php>
                    </table>
                <!-- ================= New Customers ================ -->
                <div class="recentCustomers">
                    <table>
                        <!-- Aqui podem ser adicionados mais clientes recentes -->
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- =========== Scripts =========  -->
    <script src="assets/js/main.js"></script>

    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    <!-- Aqui podemos adicionar o script para extrair os dados do localStorage e exibi-los -->
<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Obtém os dados salvos do localStorage
        const savedItem = localStorage.getItem('newItem');
        if (savedItem) {
            const newItem = JSON.parse(savedItem);

            // Insere os dados nas seções apropriadas da página
            const tbody = document.querySelector('.recentOrders tbody');
            const newRow = document.createElement('tr');
            
            newRow.innerHTML = `
                <td>${newItem.name}</td>
                <td>${newItem.amount}</td>
                <td>${newItem.description}</td>
                <td>${newItem.type}</td>
            `;
            
            tbody.appendChild(newRow);
        }
    });
</script>


</body>
</html>
