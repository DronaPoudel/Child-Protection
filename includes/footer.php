<footer>
       <div class="flex justify-center text-white">
          <div class="container text-center">
            <p class="py-6">©2022 The Child Protection Network of Nepal</p>
          <hr class="w-full">
          <p class="py-6">Powered by <a href="#">Sewa Tech</a> & WordPress.</p>
          </div>
       </div>
      </footer>

        
    <!-- </header> -->
    
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" referrerpolicy="no-referrer"></script>
    <script>
        $(document).ready(function(){
  //the trigger on hover when cursor directed to this class
    $(".core-menu li").hover(
    function(){
      //i used the parent ul to show submenu
        $(this).children('ul').slideDown('fast');
    }, 
      //when the cursor away 
    function () {
        $('ul', this).slideUp('fast');
    });
  //this feature only show on 600px device width
    $(".hamburger-menu").click(function(){
      $(".burger-1, .burger-2, .burger-3").toggleClass("open");
        $(".core-menu").slideToggle("fast");
    });
});
    </script>

  
</body>
</html>