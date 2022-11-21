const bagian1 = document.querySelector(`.bagian1`);
var audio = document.getElementById("audio");
var audio2 = document.getElementById("audio2");

function next() {
	bagian1.style.display = `none`;
	audio.play();
	audio2.play();
}

document.body.addEventListener(`keypress`, (e) => {
	if (e.key == `Enter`) {
		window.location.href = "game.html";
		audio2.play();
	}
});

const mulai = document.querySelector(`.mulai`);
mulai.onclick = next;
