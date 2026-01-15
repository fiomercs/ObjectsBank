<!-- 
Name: Fiona Veronica A. Mercado
Section: WD-201 
-->

<?php
include "classes/Account.php";
include "classes/Customer.php";
include "includes/header.php";

$accounts = [
    new Account(301145, 'Personal Savings', 28500.00),
    new Account(301278, 'Primary Checking', -7450.75),
    new Account(301389, 'Corporate Payroll', 0.00),
    new Account(301492, 'Visa Credit', -12500.50)
];

$customer = new Customer(
    "Fiona",
    "Mercado",
    "fionamercado@email.com",
    "iloveyou123",
    $accounts
);
?>

<div class="container">
    <h1>Name: <?php echo $customer->getFullName(); ?></h1>

    <table>
        <tr>
            <th>Account Number</th>
            <th>Account Type</th>
            <th>Balance</th>
        </tr>

        <?php
        foreach ($customer->accounts as $account):
        ?>
            <tr>
                <td><?php echo $account->number; ?></td>
                <td><?php echo $account->type; ?></td>

                <?php
                if ($account->balance >= 0):
                ?>
                    <td class="credit">
                        ₱<?php echo number_format($account->balance, 2); ?>
                    </td>
                <?php else: ?>
                    <td class="overdrawn">
                        ₱<?php echo number_format($account->balance, 2); ?>
                    </td>
                <?php endif; ?>
            </tr>
        <?php endforeach; ?>
    </table>
</div>

<?php
include "includes/footer.php";
?>
