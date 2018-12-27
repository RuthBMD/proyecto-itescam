let temas = [];
let config;
getTemas();
getConfig();
/**
 * Este método solo hace un llamado al API de tu app, para traer los temas
 * y se los asigna a ```temas```
 * @author Victor Isaac Lopez Fernandez
 */
function getTemas(){
  fetch('/api/temas', {
    method: 'POST'
  })
  .then(res => res.json())
  .catch(err => console.error(err))
  .then(function(res){
    temas = res;
    console.log('Temas: ', temas);
  });
}

function getConfig(){
  fetch('/api/config', {
    method: 'POST'
  })
  .then(res => res.json())
  .catch(err => console.error(err))
  .then(function(res){
    config = res;
    console.log('Configuracion: ', config);
  });
}