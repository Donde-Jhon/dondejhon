# server http
import http.server
import socketserver

PORT = 7000
handler = http.server.SimpleHTTPRequestHandler
with socketserver.TCPServer(("",PORT), handler) as httpd:
    print(f"Server running at http://localhost:{PORT}")
    httpd.serve_forever()
    
    
# este script, es un despligue de un servidor web para ejecutar el html sin salirse de vs code ni instalar nada.
# se puede borrar 
    