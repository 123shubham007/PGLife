<?php
session_start();
require "includes/database_connect.php";

$user_id = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : NULL;
$filter = $_GET["filter"];

$sql_3 = "SELECT p.id,p.name,p.address,p.gender,p.rent,a.id,a.type,a.facility 
            FROM amenities a
            INNER JOIN properties p
            ON a.id = p.id 
            WHERE a.facility = '$filter';";         
// $sql_3 = "SELECT p.id,p.name,p.address,p.gender,p.rent
//             FROM properties p
//             WHERE p.gender = '$filter'";

$result_3 = mysqli_query($conn, $sql_3);
if (!$result_3) {
    echo "---Something went wrong!---";
    return;
}
$properties = mysqli_fetch_all($result_3, MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PG Life</title>
    <?php
    include "includes/head_links.php";
    ?>
    <link href="css/home.css" rel="stylesheet" />
    <link href="css/property_list.css" rel="stylesheet" />
    <style>
        body {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' version='1.1' xmlns:xlink='http://www.w3.org/1999/xlink' xmlns:svgjs='http://svgjs.com/svgjs' width='1440' height='560' preserveAspectRatio='none' viewBox='0 0 1440 560'%3e%3cg mask='url(%26quot%3b%23SvgjsMask1248%26quot%3b)' fill='none'%3e%3crect width='1440' height='560' x='0' y='0' fill='rgba(255%2c 255%2c 255%2c 1)'%3e%3c/rect%3e%3cpath d='M-23.78862823090975 70.70139916877604L-75.65756101181552 192.89694717342613 46.53798699283456 244.76587995433192 98.40691977374034 122.57033194968182z' fill='rgba(28%2c 83%2c 142%2c 0.4)' class='triangle-float1'%3e%3c/path%3e%3cpath d='M676.8714134066703 455.54800089751495L762.6524444317189 467.603738599407 737.8455354720327 332.90432321088804z' fill='rgba(28%2c 83%2c 142%2c 0.4)' class='triangle-float1'%3e%3c/path%3e%3cpath d='M768.1437601054818 161.95005837100442L716.5788967874989 251.26302152309518 876.3307731746265 283.95383492402385z' fill='rgba(28%2c 83%2c 142%2c 0.4)' class='triangle-float3'%3e%3c/path%3e%3cpath d='M614.0627587889066 103.41521364929648L676.2957701173991 53.01991473783934 569.5863160859672-15.131952799170762z' fill='rgba(28%2c 83%2c 142%2c 0.4)' class='triangle-float1'%3e%3c/path%3e%3cpath d='M61.76813953859071 46.82780874152362L-22.0089276242037 66.16926869520276-2.6674676705245517 149.94633585799718 81.10959949226987 130.60487590431802z' fill='rgba(28%2c 83%2c 142%2c 0.4)' class='triangle-float1'%3e%3c/path%3e%3cpath d='M168.63848447884996 349.0608395806658L279.22188028241516 445.18951897538756 375.35055967713697 334.60612317182233 264.7671638735717 238.47744377710058z' fill='rgba(28%2c 83%2c 142%2c 0.4)' class='triangle-float1'%3e%3c/path%3e%3cpath d='M890.2456560438642 362.63698830108234L885.1283652272409 460.2807138439275 982.772090770086 465.3980046605508 987.8893815867093 367.7542791177056z' fill='rgba(28%2c 83%2c 142%2c 0.4)' class='triangle-float3'%3e%3c/path%3e%3cpath d='M747.321566877761 606.5394864066184L816.4648207478906 630.3474179868015 817.6050911831005 514.7285713915156z' fill='rgba(28%2c 83%2c 142%2c 0.4)' class='triangle-float3'%3e%3c/path%3e%3cpath d='M595.852793509566 419.5394282876191L645.6771733451774 339.8037528486336 565.9414979061919 289.9793730130224 516.1171180705805 369.7150484520078z' fill='rgba(28%2c 83%2c 142%2c 0.4)' class='triangle-float3'%3e%3c/path%3e%3cpath d='M1243.9353413335011 40.226997355483476L1162.0198225344398 182.10883784382122 1385.8171818218389 122.1425161545448z' fill='rgba(28%2c 83%2c 142%2c 0.4)' class='triangle-float1'%3e%3c/path%3e%3cpath d='M1093.7487062956025 63.97575694681735L1037.634090942557 157.1648747696995 1132.6668856080332 160.4834930863692z' fill='rgba(28%2c 83%2c 142%2c 0.4)' class='triangle-float1'%3e%3c/path%3e%3cpath d='M437.0215710995622 187.4051220432384L550.4041795746361 181.4629913237412 544.462048855139 68.08038284866728 431.079440380065 74.02251356816448z' fill='rgba(28%2c 83%2c 142%2c 0.4)' class='triangle-float1'%3e%3c/path%3e%3cpath d='M303.16405175517195 605.482839018907L429.04661713197936 523.7337452120263 347.2975233250986 397.85117983521883 221.41495794829117 479.60027364209964z' fill='rgba(28%2c 83%2c 142%2c 0.4)' class='triangle-float3'%3e%3c/path%3e%3cpath d='M1313.3106045216664 198.18770184754047L1349.1384815978124 265.57013846182326 1432.2981979811636 178.13710454046299z' fill='rgba(28%2c 83%2c 142%2c 0.4)' class='triangle-float3'%3e%3c/path%3e%3cpath d='M335.8625647334805 242.0434414109543L358.2945517186448 369.2615613778171 463.0806847003433 219.61145442579z' fill='rgba(28%2c 83%2c 142%2c 0.4)' class='triangle-float1'%3e%3c/path%3e%3cpath d='M822.6390429223859 73.49837105232606L852.2762088356745 124.83144820649045 914.4572416102768 54.70916075947524z' fill='rgba(28%2c 83%2c 142%2c 0.4)' class='triangle-float1'%3e%3c/path%3e%3cpath d='M72.72048817665649 399.1308022733581L37.3145792672342 552.4906425216232 190.67441951549927 587.8965514310455 226.08032842492156 434.5367111827804z' fill='rgba(28%2c 83%2c 142%2c 0.4)' class='triangle-float2'%3e%3c/path%3e%3c/g%3e%3cdefs%3e%3cmask id='SvgjsMask1248'%3e%3crect width='1440' height='560' fill='white'%3e%3c/rect%3e%3c/mask%3e%3cstyle%3e %40keyframes float1 %7b 0%25%7btransform: translate(0%2c 0)%7d 50%25%7btransform: translate(-10px%2c 0)%7d 100%25%7btransform: translate(0%2c 0)%7d %7d .triangle-float1 %7b animation: float1 5s infinite%3b %7d %40keyframes float2 %7b 0%25%7btransform: translate(0%2c 0)%7d 50%25%7btransform: translate(-5px%2c -5px)%7d 100%25%7btransform: translate(0%2c 0)%7d %7d .triangle-float2 %7b animation: float2 4s infinite%3b %7d %40keyframes float3 %7b 0%25%7btransform: translate(0%2c 0)%7d 50%25%7btransform: translate(0%2c -10px)%7d 100%25%7btransform: translate(0%2c 0)%7d %7d .triangle-float3 %7b animation: float3 6s infinite%3b %7d %3c/style%3e%3c/defs%3e%3c/svg%3e");
        }
    </style>
</head>

<body>
    <?php
    include "includes/header.php";
    ?>
    <div class="page-container">
        <?php
        foreach ($properties as $property) {
            $property_images = glob("img/properties/" . $property['id'] . "/*");
        ?>
            <div class="property-card property-id-<?= $property['id'] ?> row">
                <div class="image-container col-md-4">
                    <img src="<?= $property_images[0] ?>" />
                </div>
                <div class="content-container col-md-8">
                    <div class="detail-container">
                        <div class="property-name"><?= $property['name'] ?></div>
                        <div class="property-address"><?= $property['address'] ?></div>
                        <div class="property-gender">
                            <?php
                            if ($property['gender'] == "Male") {
                            ?>
                                <img src="img/male.png" />
                            <?php
                            } else {
                            ?>
                                <img src="img/female.png" />
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                    <div class="row no-gutters">
                        <div class="rent-container col-6">
                            <div class="rent">₹ <?= number_format($property['rent']) ?>/-</div>
                            <div class="rent-unit">per month</div>
                        </div>
                        <div class="button-container col-6">
                            <a href="property_detail.php?property_id=<?= $property['id'] ?>" class="btn btn-primary">View</a>
                        </div>
                    </div>
                </div>
            </div>
        <?php
        }
        ?>
    </div>
    <?php
    include "includes/signup_modal.php";
    include "includes/login_modal.php";
    include "includes/footer.php";
    ?>
    <script type="text/javascript" src="js/property_list.js"></script>
</body>
</html>