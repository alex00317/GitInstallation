<?php include('header.php'); ?>

<div class="reg-body">
    <div class="reg-laft-side">
        <h1> Welcome to our Registration page</h1></br>
        <form action="#">
            <div class="row">
                <input class="inputText name" type="text" name="name" placeholder="Enter Your Name">
            </div>
            <div class="row">
                <input class="inputText" type="text" name="name" placeholder="Enter Your Father Name">
            </div>
            <div class="row">
                <input class="inputText" type="text" name="name" placeholder="Enter Your Mother Name">
            </div>
            <div class="row">
                <input class="inputText" type="email" name="email" placeholder="Enter Email">
            </div>
            <div class="row">
                <input class="inputText" type="number" name="phone" placeholder="Enter Phone">
            </div>
            <div class="row">
                <input class="inputText" type="password" name="password" placeholder="Enter Password">
            </div>
            <div class="row">Select Gender
                <input type="radio" name="gender" id="">Male
                <input type="radio" name="gender" id="">Female
                <input type="radio" name="gender" id="">Other
            </div>

            <div class="row">
                <input type="checkbox" name="skill" id="">HTML
                <input type="checkbox" name="skill" id="">CSS
                <input type="checkbox" name="skill" id="">C
                <input type="checkbox" name="skill" id="">C++
                <input type="checkbox" name="skill" id="">Java
                <input type="checkbox" name="skill" id="">PHP
                <input type="checkbox" name="skill" id="">SQL
                <input type="checkbox" name="skill" id="">PYTHON
                <input type="checkbox" name="skill" id="">RUBY
            </div>
            <div class="row">Select Religion
                <select name="" id="">
                    <option value="Islam">Islam</option>
                    <option value="Buddhism">Buddhism</option>
                    <option value="Christianity">Christianity</option>
                    <option value="Hinduism">Hinduism</option>
                </select>
            </div>
            <div class="row">Select Country
                <select name="" id="">
                    <option value="bangladesh">Bangladesh</option>
                    <option value="Japan">Japan</option>
                    <option value="USA">USA</option>
                    <option value="UK">UK</option>
                    <option value="India">India</option>
                    <option value="China">China</option>
                </select>
            </div>

            <button style="color: red"> Clear Data</button>
            <button style="color: green"><a href="from.pdf" target="blank"> Data Preview</a></button>
            <button style="color: red"> Exit</button>
            <input type="file" name="name">

            <button class="btn register" type="submit">Register</button>

        </form>




    </div>
    <div class="reg-right-side">
        <h1> Payment method accept</h1></br>
        <img class="p-image" src="img/pm.png" alt="Payment Method image missing">

        <h1>Payment method Exempal </h1>
        <iframe src="https://www.youtube.com/watch?v=wkDkWttHlXU" width="480px" height="200px">
        </iframe>

    </div>





</div>



<?php include('footer.php'); ?>