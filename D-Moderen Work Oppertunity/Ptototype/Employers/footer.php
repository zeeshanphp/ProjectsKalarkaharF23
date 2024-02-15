<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.js"></script>
</body>
<script>
    $(function() {

        $(".rateYo").rateYo({
            onSet: function(rating, rateYoInstance) {
                $('.rating').val(rating);
            }
        });

    });
</script>
</body>

</html>