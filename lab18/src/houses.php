<?php
include('db.php');
$sql = "SELECT * FROM houses";
$result = $conn->query($sql);
?>

<div class="container mx-auto p-4">
    <h1 class="text-3xl font-bold mb-6">Houses</h1>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <?php
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {

                // рандомна знижка
                $discount = rand(0, 30);
                $finalPrice = $row['price'] - ($row['price'] * $discount / 100);

                echo "<div class='bg-white rounded shadow overflow-hidden'>";
                echo "  <div class='h-56 bg-cover bg-center' style='background-image: url(\"".$row['image']."\")'></div>";
                echo "  <div class='p-4'>";
                echo "      <h2 class='text-xl font-semibold mb-2'>" . htmlspecialchars($row['title']) . "</h2>";

                if ($discount > 0) {
                    echo "<p class='text-gray-500 line-through'>$".number_format($row['price'])."</p>";
                    echo "<p class='text-2xl font-bold text-red-600'>$".number_format($finalPrice)." <span class='text-sm text-red-500'>(".$discount."% OFF)</span></p>";
                } else {
                    echo "<p class='text-2xl font-bold text-gray-900'>$".number_format($row['price'])."</p>";
                }

                echo "      <p class='text-gray-700'>" . htmlspecialchars($row['address']) . "</p>";
                echo "      <p class='text-gray-700'>Bedrooms: " . htmlspecialchars($row['bedrooms']) . "</p>";
                echo "      <p class='text-gray-700'>Bathrooms: " . htmlspecialchars($row['bathrooms']) . "</p>";
                echo "  </div>";

                // Realtor
                echo "<div class='px-4 py-3 border-t border-gray-300 bg-gray-100 flex items-center'>";
                echo "  <div class='w-10 h-10 rounded-full bg-cover bg-center mr-3' style='background-image: url(\"".$row['realtor_image']."\")'></div>";
                echo "  <div>";
                echo "      <p class='font-bold text-gray-900'>".$row['realtor_name']."</p>";
                echo "      <p class='text-sm text-gray-700'>".$row['realtor_phone']."</p>";
                echo "  </div>";
                echo "</div>";

                echo "</div>"; // card end
            }
        } else {
            echo "<p>No houses found.</p>";
        }
        ?>
    </div>
</div>
