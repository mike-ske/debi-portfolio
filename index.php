


<!-- ============ HEROE SECTION ============= -->

<!-- ============ END HEROE SECTION ============= -->

<!-- ============ ABOUT ME SECTION ============= -->

<!-- ============ END ABOUT ME SECTION ============= -->

<!-- ============ SKILLS SECTION ============= -->

<form name="form">
    <ul>
        <li>
            <label for="Home">Home</label>
            <input type="radio" name="item" id="Home" value="home" class="item">
        </li>
        <li>
            <label for="About">About</label>
            <input type="radio" name="item" id="About" value="about" class="item">
        </li>
        <li>
            <label for="Contact">Contact</label>
            <input type="radio" name="item" id="Contact" value="contact" class="item">
        </li>
    </ul>
</form>

<div class="response"></div>

<script>

let form1 = document.getElementsByClassName("item")

for (let i = 0; i < form1.length; i++) {

    var v = form1[i]

    console.log(v.value);

    v.addEventListener('click', function () {
        // e.preventDefault()
        val = form1[i].value
        console.log(v.value);
        let xhtp =  new XMLHttpRequest();
        
        xhtp.onreadystatechange = function () 
        {
            if (this.readyState == 4 && this.status == 200) {
                document.querySelector('.response').innerHTML = this.responseText;
                alert(this.responseText);
            }
        }
        xhtp.open('GET', 'response.php?item='+val, true);
        xhtp.send();

    });
}

</script>
<!-- ============ END SKILLS SECTION ============= -->

<!-- ============ MY WORKS SECTION ============= -->

<!-- ============ END MY WORKS SECTION ============= -->

<!-- ============ EXPERTISE  SECTION ============= -->

<!-- ============ END EXPERTISE SECTION ============= -->

<!-- ============ CONTACT SECTION ============= -->

<!-- ============ END CONTACT SECTION ============= -->
<?php
//  require './footer.php' 
 ?>