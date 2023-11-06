
<script>
    const pathName = window.location.pathname;
    const pageName = pathName.split("/").pop();

    if(pageName === "index.php"){
        document.querySelector(".task1").classList.add("activeLink");
    }
    if(pageName === "order_items.php"){
        document.querySelector(".task2").classList.add("activeLink");
    }
    if(pageName === "total_revenue.php"){
        document.querySelector(".task3").classList.add("activeLink");
    }
    if(pageName === "top_5_customers.php"){
        document.querySelector(".task4").classList.add("activeLink");
    }
</script>
</body>
</html>