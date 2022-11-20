<section class="booking">
    <h1 class="heading-title">Book your trips!</h1>
    <form action="book_form.php" method="post" class="book-form">
        <div class="flex">
            <div class="input-box">
                <span>Name: </span>
                <input type="text" name="name" placeholder="Enter your name">
            </div>

            <div class="input-box">
                <span>Email: </span>
                <input type="email" name="email" placeholder="Enter your email">
            </div>

            <div class="input-box">
                <span>Phone: </span>
                <input type="number" name="phone" placeholder="Enter your phone">
            </div>

            <div class="input-box">
                <span>Address: </span>
                <input type="text" name="address" placeholder="Enter your address">
            </div>

            <div class="input-box">
                <span>Where: </span>
                <input type="text" name="location" placeholder="Enter place you want to visit">
            </div>

        </div>
        <div>
            <input type="submit" name="send" value="submit" class="btn">
        </div>
    </form>
</section>