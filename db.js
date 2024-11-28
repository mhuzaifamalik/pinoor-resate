const mongoDBURI = `mongodb+srv://codemarkcodes:A0YotBCjgXiIxQo0@cluster0.sae5o.mongodb.net/pioneer-reality`
const mongoose = require('mongoose')

mongoose.connect(mongoDBURI).then(()=>{
    console.log(`Database Connected!`)
})