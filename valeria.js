const fetchPokemon = () => {
    const pokeNameInput = document.getElementById("pokeName");
    let pokeName = pokeNameInput.value;
    pokeName = pokeName.toLowerCase();
    const url = `https://pokeapi.co/api/v2/pokemon/${pokeName}`;
    
    pokeImage("./pokemaster.png");
    
    fetch(url).then((res) => {
        if (res.status !== 200) {
            console.log(res);
            pokeImage("./pokemaster.png");
            limpiarDatos();
            return;
        } else {
            return res.json();
        }
    }).then((data) => {
        if (data) {
            console.log(data);
            
            
            let pokeImg = data.sprites.other["official-artwork"].front_default || data.sprites.front_default;
            pokeImage(pokeImg);

            let name = document.getElementById('pokename');
            name.innerHTML = `📛 Name: ${data.forms[0].name.toUpperCase()}`;

            let element1 = document.getElementById('pokeHe');
            element1.innerHTML = `📏 Height: ${(data.height / 10).toFixed(1)} m`;

            let element2 = document.getElementById('pokeWe');
            element2.innerHTML = `⚖️ Weight: ${(data.weight / 10).toFixed(1)} kg`;

            let element3 = document.getElementById('pokeorder');
            element3.innerHTML = `#${data.order}`;

            let element4 = document.getElementById('pokeid');
            element4.innerHTML = `#${data.id.toString().padStart(3, '0')}`;

            let element5 = document.getElementById('pokeitem');
            element5.innerHTML = `💪 Ability: ${data.abilities[0].ability.name.toUpperCase()}`;

            let element6 = document.getElementById('poketype');
            element6.innerHTML = `🎭 Type: ${data.types[0].type.name.toUpperCase()}`;

            let moves = data.moves;
            document.getElementById('pokemove1').innerHTML = `⚡ Move 1: ${moves[0] ? moves[0].move.name.replace(/-/g, ' ').toUpperCase() : '--'}`;
            document.getElementById('pokemove2').innerHTML = `⚡ Move 2: ${moves[1] ? moves[1].move.name.replace(/-/g, ' ').toUpperCase() : '--'}`;
            document.getElementById('pokemove3').innerHTML = `⚡ Move 3: ${moves[2] ? moves[2].move.name.replace(/-/g, ' ').toUpperCase() : '--'}`;
            document.getElementById('pokemove4').innerHTML = `⚡ Move 4: ${moves[3] ? moves[3].move.name.replace(/-/g, ' ').toUpperCase() : '--'}`;

            const canvas = document.getElementById('miCanvas');
            const ctx = canvas.getContext('2d');
            
            if (window.miChart) {
                window.miChart.destroy();
            }
            
            window.miChart = new Chart(ctx, {
                type: "bar",
                data: {
                    labels: ["HP", "Attack", "Defense", "Special-A", "Special-D", "Speed"],
                    datasets: [{
                        label: `${data.forms[0].name.toUpperCase()}`,
                        backgroundColor: 'rgba(255, 222, 0, 0.7)',
                        borderColor: '#ffde00',
                        borderWidth: 2,
                        data: [
                            data.stats[0].base_stat,
                            data.stats[1].base_stat,
                            data.stats[2].base_stat,
                            data.stats[3].base_stat,
                            data.stats[4].base_stat,
                            data.stats[5].base_stat
                        ]
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: true,
                    scales: {
                        y: {
                            beginAtZero: true,
                            max: 255,
                            title: {
                                display: true,
                                text: 'Estadísticas Base',
                                color: '#333'
                            }
                        }
                    },
                    plugins: {
                        legend: {
                            labels: {
                                font: { size: 12 }
                            }
                        }
                    }
                }
            });
        }
    }).catch(error => {
        console.error("Error:", error);
        pokeImage("./pokemaster.png");
        limpiarDatos();
    });
};

const pokeImage = (url) => {
    const pokePhoto = document.getElementById("pokeImg");
    pokePhoto.src = url;
}

const limpiarDatos = () => {
    document.getElementById('pokename').innerHTML = '📛 Name: --';
    document.getElementById('pokeHe').innerHTML = '📏 Height: --';
    document.getElementById('pokeWe').innerHTML = '⚖️ Weight: --';
    document.getElementById('poketype').innerHTML = '🎭 Type: --';
    document.getElementById('pokeitem').innerHTML = '💪 Ability: --';
    document.getElementById('pokemove1').innerHTML = '⚡ Move 1: --';
    document.getElementById('pokemove2').innerHTML = '⚡ Move 2: --';
    document.getElementById('pokemove3').innerHTML = '⚡ Move 3: --';
    document.getElementById('pokemove4').innerHTML = '⚡ Move 4: --';
    document.getElementById('pokeid').innerHTML = '--';
    document.getElementById('pokeorder').innerHTML = '--';
    
    if (window.miChart) {
        window.miChart.destroy();
        window.miChart = null;
    }
}