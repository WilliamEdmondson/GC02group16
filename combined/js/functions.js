<head>
    <title>Internal Script Fucntions</title>
    <body>
    <script type="text/javasctipt">
        function showFiles()
{
    document.getElementById("filepicker").addEventListener("change", function (event) {
        let output = document.getElementById("listing");
        let files = event.target.files;

        for (let i = 0; i < files.length; i++) {
            let item = document.createElement("li");
            item.innerHTML = files[i].webkitRelativePath;
            output.appendChild(item);
        }
        ;
    }, false);
}
</script>
    </body>

