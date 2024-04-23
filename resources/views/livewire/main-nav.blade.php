<div class="">
<nav class="flex flex-no-wrap  items-center  top-0 justify-between p-3 dark:bg-black bg-slate-200">
    
    <div class="flex md:hidden">
        <button id="hamburger">
          <img class="toggle block" src="https://img.icons8.com/FFFFFF/menu" width="40" height="40"  />
          
          <img class="toggle hidden" src="https://img.icons8.com/fluent-systems-regular/FFFFFF/2x/close-window.png" width="40" height="40" />
        </button>
    </div>
    <div
        class="toggle hidden w-full md:w-auto md:flex text-left text-bold mt-5 md:mt-0 border-t-2 border-blue-900 md:border-none">
        <a href="#"
            class="block md:inline-block text-white hover:text-blue-500 px-3 py-3 border-b-2 border-blue-900 md:border-none">Home
        </a>
        <a href="#"
            class="block md:inline-block text-white hover:text-blue-500 px-3 py-3 border-b-2 border-blue-900 md:border-none">Products
        </a>
        <a href="#"
            class="block md:inline-block text-white hover:text-blue-500 px-3 py-3 border-b-2 border-blue-900 md:border-none">Pricing
        </a>
        <a href="#"
            class="block md:inline-block text-white hover:text-blue-500 px-3 py-3 border-b-2 border-blue-900 md:border-none">Contact
        </a>
    </div>
    <a href="#"
        class="toggle hidden md:flex w-full md:w-auto px-3 py-3 text-left text-white hover:text-blue-500 md:border-none">Create
        Account

    </a>
</nav>
<script>
    document.getElementById("hamburger").onclick = function toggleMenu() {
        const navToggle = document.getElementsByClassName("toggle");
        for (let i = 0; i < navToggle.length; i++) {
          navToggle.item(i).classList.toggle("hidden");
        }
      };
</script>
</div>


