function savePose() {
    let data = {
        motor1: document.getElementById("m1").value,
        motor2: document.getElementById("m2").value,
        motor3: document.getElementById("m3").value,
        motor4: document.getElementById("m4").value,
        motor5: document.getElementById("m5").value,
        motor6: document.getElementById("m6").value
    };

    fetch('insert_pose.php', {
        method: 'POST',
        headers: {'Content-Type': 'application/json'},
        body: JSON.stringify(data)
    }).then(() => loadData());
}

function loadData() {
    fetch('get_run_pose.php')
        .then(response => response.text())
        .then(html => {
            document.getElementById('tableArea').innerHTML = html;
        });
}

function removePose(id) {
    fetch(`delete_pose.php?id=${id}`).then(() => loadData());
}