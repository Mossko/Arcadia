const express = require('express');
const app = express();
const path = require('path');
var fs = require('fs');
const port = 5600;

app.use(express.static(path.join(__dirname, 'views')));

app.get('/', async (req, res) => {
    res.render('jungle.');
})

app.post('/compter', async (req, res) => {
    var preCompteur;

    fs.readFile('CompteurVisite.json', 'utf-8', (err, comptenu) => {
        if (err) { console.log(err) }

        preCompteur = parseInt(comptenu)
        preCompteur++


        fs.writeFile('CompteurVisite.json', preCompteur.toString(), (err) => {
            if (err) console.log(err);

            console.log('Sa marche')

            res.json({ status: 'ok', visiteur: preCompteur })
        })
    })
})

app.listen(port, () => {
    console.log('App tourne sur le port : ${port}')
})

module.exports = app;

import { } from 'mongodb'

export async function connect() {
    // Connection URL
    const url = 'mongodb://localhost:27017/Arcadia'

    let db

    try {
        db = await MongoClient.connect(url)
        console.log('Connected successfully!')
    } catch (err) {
        // Handle error
    }

    return db
}