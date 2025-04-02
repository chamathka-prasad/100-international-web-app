<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Card</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .product-card {
            margin: 30px auto;
            max-width: 900px;
        }
        .details-container {
            background-color: rgba(0, 0, 0, 0.05);
            height: 100%;
            padding: 20px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }
        .product-image {
            width: 100%;
            height: auto;
            object-fit: cover;
        }
        .buy-button {
            background-color: #ffc107;
            border: none;
            color: #000;
            font-weight: bold;
            padding: 10px 0;
            margin-top: 15px;
            width: 100%;
        }
        .buy-button:hover {
            background-color: #ffca2c;
            color: #000;
        }
        .price {
            font-size: 24px;
            font-weight: bold;
        }
        .product-name {
            font-size: 28px;
            margin-bottom: 15px;
        }
        @media (max-width: 767px) {
            .details-container {
                margin-top: 15px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="product-card">
            <div class="row">
                <!-- On mobile, this column will appear second -->
                <div class="col-md-6 order-md-1 order-2">
                    <div class="details-container">
                        <h2 class="product-name">Premium Headphones</h2>
                        <p class="price">$199.99</p>
                        <p class="description">Experience crystal clear sound with our premium noise-cancelling headphones. Featuring Bluetooth 5.0, 30-hour battery life, and ultra-comfortable ear cushions.</p>
                        <ul>
                            <li>Noise cancellation technology</li>
                            <li>30-hour battery life</li>
                            <li>Premium comfort design</li>
                            <li>1-year warranty</li>
                        </ul>
                    </div>
                </div>
                <!-- On mobile, this column will appear first -->
                <div class="col-md-6 order-md-2 order-1">
                    <img src="/api/placeholder/400/400" alt="Premium Headphones" class="product-image">
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <button class="btn buy-button">BUY NOW</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>