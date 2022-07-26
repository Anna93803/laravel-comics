<div class="header-Top">
    <div class="container">
        <div>DC POWER &#8480; VISA &#174;</div>
        <div>ADDITIONAL DC SITES <i class="fas fa-caret-down"></i></div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col">
            <img src="../assets/img/dc-logo.png" alt="logo-dc">
        </div>
        <div class="col">
            <ul>
                <li v-for="(link, i) in navLinks" :key="i">{{ link.name }}<a :href="link.href"></a></li>
            </ul>
        </div>
    </div>
</div>