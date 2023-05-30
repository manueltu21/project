function encryptText(text, shift) {
  var encryptedText = "";
  for (var i = 0; i < text.length; i++) {
    var char = text[i];
    if (char.match(/[a-z]/i)) {
      var code = text.charCodeAt(i);
      if (code >= 65 && code <= 90) {
        char = String.fromCharCode(((code - 65 + shift) % 26) + 65);
      } else if (code >= 97 && code <= 122) {
        char = String.fromCharCode(((code - 97 + shift) % 26) + 97);
      }
    }
    encryptedText += char;
  }
  return encryptedText;
}

// Ejemplo de uso:
var textoOriginal = "Hola, mundo!";
var textoEncriptado = encryptText(textoOriginal, 3);
console.log("Texto encriptado:", textoEncriptado);
