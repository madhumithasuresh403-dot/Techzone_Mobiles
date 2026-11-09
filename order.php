<?php include "header.html"; ?>

<link rel="stylesheet" href="style.css">

<section class="order">

    <h1>🛒 Order Now</h1>
    <p>Fill your details to place your order</p>

    <div class="order-box">

        <form>

            <input type="text" placeholder="Enter Your Name" required>

            <input type="tel" placeholder="Enter Mobile Number" required>

            <input type="email" placeholder="Enter Email Address" required>

            <textarea rows="4" placeholder="Enter Delivery Address" required></textarea>

            <select required>
                <option value="">Select Payment Method</option>
                <option>Cash on Delivery</option>
                <option>UPI</option>
                <option>Debit Card</option>
                <option>Credit Card</option>
            </select>

            <button type="submit">Place Order</button>

        </form>

    </div>

</section>

<?php include "footer.html"; ?>