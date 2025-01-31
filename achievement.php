<?php include 'common/header.php'; ?>
<?php include 'common/navigation.php'; ?>
<div class="chart-header">
    <p>News Articles & Achievements <span class="highlight">Section</span></p>
</div>
<div class="chart-section">
    <div id="chart-container">
        <div id="vertical-line"></div>
    </div>
</div>
<script>
const expenditures = [{
        value: 500,
        label: "2022",
        description: "Article at one of the oldest and first Nepali newspaper Gorkhapatra."
    },
    {
        value: 400,
        label: "Sept, 2022",
        description: "First International Art exhibition at Mithila Yan Art Gallery, Nepal and inaugration by Bangladesh."
    },
    {
        value: 300,
        label: "Nov, 2022",
        description: "International Art Exhibition 'Rang Utsav 3' by ShivaRang in Mithila Yan Art Gallery."
    },
    {
        value: 150,
        label: "Mar, 2023",
        description: "International Art Exhibition by Lions Club of Kathmandu in collab with Hotel Arts Kathmandu."
    },
    {
        value: 350,
        label: "Aug, 2023",
        description: "Fifth Aesthetic Art Exhibition at Nepal Art Council(NAC)."
    },
    {
        value: 300,
        label: "Nov, 2024",
        description: "Fourth International Art Exhibition 'Rang Utsav 4' by ShivRang in National Academy Of Fine Art(NAFA)."
    },
    {
        value: 500,
        label: "2024",
        description: "Received 'Best Artwork Award' selected by chancellor of NAFA."
    },
    {
        value: 250,
        label: "Upcoming...",
        description: "Will be held in Taragaon Next, Kathmandu"
    },
];

const chartContainer = document.getElementById("chart-container");

expenditures.forEach((expenditure, index) => {
    const branch = document.createElement("div");
    const isRight = index % 2 === 0;
    const topPercentage = (index + 1) * 10;
    const branchWidth = expenditure.value / 10;

    // Style for the branch
    branch.style.position = "absolute";
    branch.style.top = `${topPercentage}%`;
    branch.style.height = "2px";
    branch.style.transition = "width 0.5s";
    branch.style.backgroundColor = isRight ? "#A90262" : "var(--secondary-clr)";

    if (isRight) {
        branch.style.left = "50%";
        branch.style.width = "0px";
    } else {
        branch.style.right = "50%";
        branch.style.width = "0px";
    }

    setTimeout(() => {
        branch.style.width = `${branchWidth}px`;
    }, 100);

    // Label for the expenditure
    const label = document.createElement("div");
    label.innerHTML = `<strong>${expenditure.label}</strong><br>${expenditure.description}`;
    label.style.position = "absolute";
    label.style.top = "-30px";
    label.style.fontSize = "12px";
    label.style.color = "var(--primary-clr)";
    label.style.width = "120px";
    label.style.textAlign = "center";

    if (isRight) {
        label.style.left = `${branchWidth + 10}px`;
    } else {
        label.style.right = `${branchWidth + 10}px`;
    }

    branch.appendChild(label);
    chartContainer.appendChild(branch);

    // Dot at the junction
    const junctionDot = document.createElement("div");
    junctionDot.style.position = "absolute";
    junctionDot.style.width = "12px";
    junctionDot.style.height = "12px";
    junctionDot.style.borderRadius = "50%";
    junctionDot.style.top = `${topPercentage - 0}%`;
    junctionDot.style.left = "50%";
    junctionDot.style.transform = "translate(-50%, -50%)";
    junctionDot.style.backgroundColor = isRight ? "#A90262" : "var(--secondary-clr)";

    chartContainer.appendChild(junctionDot);
});
</script>


<?php include 'common/footer.php'; ?>