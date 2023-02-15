function uploadPcap() {
    const file = document.querySelector('input[type="file"]').files[0];
    const user_id = document.getElementById('user_id').value;
    const formData = new FormData();
    formData.append('file', file);
    formData.append('user_id', user_id);
    const xhr = new XMLHttpRequest();
    xhr.open('POST', 'http://127.0.0.1:5000/upload_pcap');
    xhr.onload = function() {
      if (xhr.status === 200) {
        alert('PCAP file uploaded successfully');
        window.open("https://www.google.com", "Window Name", "height=200,width=400");
      } else {
        alert('Failed to upload PCAP file');
      }
    };
    xhr.send(formData);
  }