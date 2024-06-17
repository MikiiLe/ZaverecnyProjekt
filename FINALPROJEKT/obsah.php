<?php
require 'funkce.php';

$chyba = '';
$vybranyHrac = 'hrac1';

$hraci = [
    'hrac1' => [
        'nazev' => 'Keby',
        'informace' => [
            'Jméno' => 'Adam Lásko',
            'Věk' => 19,
            'Oblíbený balíček' => 'LostBox',
        ],
        'popis' => [
            'Velmi chytrý a rád hraje S tier balíčky',
            '175/500 bodů'
        ]
    ],
    'hrac2' => [
        'nazev' => 'Beast',
        'informace' => [
            'Jméno' => 'Ondřej Rýdl',
            'Věk' => 18,
            'Oblíbený balíček' => 'Gardevoir',
        ],
    
        'popis' => [
            'Všechny, které vidí tak z beastí a lakoš do vlastního týmu',
            '52/500 bodů'
        ]
    ],
    'hrac3' => [
        'nazev' => 'Ježek',
        'informace' => [
            'Jméno' => 'Tadeáš Chaloupka',
            'Věk' => 18,
            'Oblíbený balíček' => 'Není, ale má rád enteie',
        ],
    
        'popis' => [
            'Má radši pivo jak pokémony',
            '145/500 bodů'
        ]
    ]
];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['hrac']) && array_key_exists($_POST['hrac'], $hraci)) {
        $vybranyHrac = $_POST['hrac'];
    } else {
        $chyba = 'Prosím, vyberte platného hráče.';
    }
}

$nazevHraci = $hraci[$vybranyHrac]['nazev'];
$informace = $hraci[$vybranyHrac]['informace'];
$popis = $hraci[$vybranyHrac]['popis'];
?>
<div class="obsah">
    <h2><?php echo htmlspecialchars($nazevHraci); ?></h2>
    <img src="<?php echo htmlspecialchars($nazevHraci);?>.png">
    
    <h3>Informace o hráči</h3>
    <form method="post">
        <label for="hrac">Vyberte hráče:</label>
        <select id="hrac" name="hrac">
            <?php foreach ($hraci as $hracKey => $hracData): ?>
                <option value="<?php echo $hracKey; ?>" <?php echo $vybranyHrac === $hracKey ? 'selected' : ''; ?>>
                    <?php echo htmlspecialchars($hracData['nazev']); ?>
                </option>
            <?php endforeach; ?>
        </select>
        <button type="submit">Zobrazit</button>
        <div class="chyba"><?php echo $chyba; ?></div>
    </form>

    <ul>
    <?php foreach ($informace as $nazev => $hodnota): ?>
        <li><?php echo $nazev . ': ' . htmlspecialchars($hodnota); ?></li>
    <?php endforeach; ?>
    </ul>

    <h3>Popis hráče</h3>
    <ul>
    <?php foreach ($popis as $krok): ?>
        <li><?php echo htmlspecialchars($krok); ?></li>
    <?php endforeach; ?>
    </ul>
</div>
