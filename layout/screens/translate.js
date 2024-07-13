<script>
        // Function to translate the content
    function translateContent() {
            const targetLanguage = document.getElementById("languageSelector").value;
    const contentElements = document.getElementById("content").children;

            // Iterate over each child element of #content
            Array.from(contentElements).forEach(element => {
                const content = element.innerHTML;

    // Google Translate API URL
    const translateURL = https://translate.googleapis.com/translate_a/single?client=gtx&sl=auto&tl=${targetLanguage}&dt=t&q=${encodeURI(content)};

    // Fetch translation
    fetch(translateURL)
                    .then(response => response.json())
                    .then(data => {
                        const translatedText = data[0][0][0]; // Extract translated text
    element.innerHTML = translatedText; // Update content
                    })
                    .catch(error => console.error('Error:', error));
            });
        }

    // Event listener for language selection change
    document.getElementById("languageSelector").addEventListener("change", translateContent);

    // Initial translation when the page loads
    translateContent();
</script>

