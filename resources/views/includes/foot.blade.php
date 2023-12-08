<script>
    window.addEventListener('beforeunload', function() {
        var xhr = new XMLHttpRequest();
        xhr.open('GET', '/clear-session', true);
        xhr.send();
    });
</script>

</html>