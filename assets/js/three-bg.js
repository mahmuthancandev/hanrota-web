// Basic Three.js Scene Setup
const scene = new THREE.Scene();
const camera = new THREE.PerspectiveCamera(75, window.innerWidth / window.innerHeight, 0.1, 1000);
const renderer = new THREE.WebGLRenderer({ alpha: true, antialias: true });

const container = document.getElementById('webgl-canvas');
renderer.setSize(window.innerWidth, window.innerHeight);
container.appendChild(renderer.domElement);

// Particles
const particlesGeometry = new THREE.BufferGeometry();
const particlesCount = 700;

const posArray = new Float32Array(particlesCount * 3);

for(let i = 0; i < particlesCount * 3; i++) {
    posArray[i] = (Math.random() - 0.5) * 15; // Spread particles
}

particlesGeometry.setAttribute('position', new THREE.BufferAttribute(posArray, 3));

// Material
const particlesMaterial = new THREE.PointsMaterial({
    size: 0.02,
    color: 0x6a00ff, // Primary purple
    transparent: true,
    opacity: 0.8,
});

// Mesh
const particlesMesh = new THREE.Points(particlesGeometry, particlesMaterial);
scene.add(particlesMesh);

// Connecting Lines (Optional for cooler effect, but heavy)
// Instead, let's add a wireframe geometric shape in the center
const geoGeometry = new THREE.IcosahedronGeometry(2, 1);
const geoMaterial = new THREE.MeshBasicMaterial({ 
    color: 0x00e5ff, 
    wireframe: true,
    transparent: true,
    opacity: 0.3
});
const geoMesh = new THREE.Mesh(geoGeometry, geoMaterial);
scene.add(geoMesh);

camera.position.z = 5;

// Mouse Interaction
let mouseX = 0;
let mouseY = 0;

document.addEventListener('mousemove', (event) => {
    mouseX = event.clientX / window.innerWidth - 0.5;
    mouseY = event.clientY / window.innerHeight - 0.5;
});

// Animation Loop
const clock = new THREE.Clock();

function animate() {
    const elapsedTime = clock.getElapsedTime();

    // Rotate Big Shape
    geoMesh.rotation.y = elapsedTime * 0.1;
    geoMesh.rotation.x = elapsedTime * 0.05;

    // Particles Movement
    particlesMesh.rotation.y = -elapsedTime * 0.05;
    particlesMesh.rotation.x = mouseY * 0.5;
    particlesMesh.rotation.y += mouseX * 0.5;

    // Hover effect parity
    geoMesh.rotation.x += 0.05 * (mouseY - geoMesh.rotation.x);
    geoMesh.rotation.y += 0.05 * (mouseX - geoMesh.rotation.y);

    renderer.render(scene, camera);
    requestAnimationFrame(animate);
}

animate();

// Resize Handler
window.addEventListener('resize', () => {
    camera.aspect = window.innerWidth / window.innerHeight;
    camera.updateProjectionMatrix();
    renderer.setSize(window.innerWidth, window.innerHeight);
});
