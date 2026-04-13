<?php
class Account
{
    public int    $number;
    public string $type;
    public float  $balance;

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

$account = new Account();
$account->balance = 100.00;
?>
<?php include 'includes/header.php'; ?>
    <p>Total $ <?= $account->balance?></p>
    <p>$ <?= $account->deposit(50.00) ?></p>
    <p>$ <?= $account->withdraw(70)?></p>
<?php include 'includes/footer.php'; ?>