<?php
declare(strict_types = 1);

class Account
{
    public int    $number;
    public string $type;
    public float  $balance;

    public function __construct(int $number, string $type, float $balance = 0.00)
    {
        $this->number  = $number;
        $this->type    = $type;
        $this->balance = $balance;
    }

    public function deposit(float $amount): float
    {
        $this->balance += $amount;
        return $this->balance;
    }

    public function withdraw(float $amount): float
    {
        $this->balance -= $amount;
        return $this->balance;
    }
}

$corrente = new Account(43161176, 'corrente', 32.00);
$poupanca  = new Account(20148896, 'poupança', 756.00);
?>

<?php include 'includes/header.php'; ?>
<h2>Account Balances</h2>
<table>
  <tr>
    <th>Date</th>
    <th> <?= $corrente->type ?> </th>
    <th> <?= $poupanca->type ?> </th>
  </tr>
  <tr>
    <td><?php echo  date('d/m'); ?></td>
    <td>$<?= $corrente->balance ?></td>
    <td>$<?= $poupanca->balance  ?></td>
  </tr>
  <tr>
    <td><?= date('d/m'); ?></td>
    <td>$<?= $corrente->deposit(12.00)  ?></td>
    <td>$<?= $poupanca->withdraw(100.00) ?></td>
  </tr>
  <tr>
    <td><?= date('d/m'); ?></td>
    <td>$<?= $corrente->withdraw(5.00) ?></td>
    <td>$<?= $poupanca->deposit(300.00) ?></td>
  </tr>
</table>
<?php include 'includes/footer.php'; ?>