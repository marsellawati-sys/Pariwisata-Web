<!-- JS Interaktif -->
<script>
document.getElementById("contactForm").addEventListener("submit", function(e) {
  e.preventDefault();
  let nama = document.getElementById("nama").value.trim();
  let email = document.getElementById("email").value.trim();
  if (nama === "" || email === "") {
    alert("Nama dan email wajib diisi!");
    return;
  }
  if (confirm("Kirim pesan ini?")) {
    alert("Pesan berhasil dikirim! Terima kasih sudah menghubungi kami.");
    this.reset();
  }
});
</script>
