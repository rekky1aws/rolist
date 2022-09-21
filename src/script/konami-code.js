document.body.addEventListener('keydown', konamiCodeFunc);

const konamiCode = ['ArrowUp', 'ArrowUp', 'ArrowDown', 'ArrowDown', 'ArrowLeft', 'ArrowRight', 'ArrowLeft', 'ArrowRight', 'b', 'a', 'KeyEnter']
let n = 0;

function konamiCodeFunc (e)
{
	if (e.key === "Enter" && n === konamiCode.length - 1) {
		console.log('GG vous avez fait le konami code, pour l\'instant, il y a ... rien xD');
		// Ajouter le code qui s'executera après avoir fait le konami code.
	} else if (e.key === "Enter") {
		console.log('Il me semble pas que ce soit ça...')
	}
	if (e.key === konamiCode[n]) {
		n++;
	} else {
		n = 0;
	}
}