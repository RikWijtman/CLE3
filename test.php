<script>
    fetch('./js/tram.json')
    .then ((response)=>
response.json ())
.then((json)=>
console.log(json));
</script>