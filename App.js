import logo from './logo.svg';
import './App.css';
import Card from '@mui/material/Card';
import CardMedia from '@mui/material/CardMedia';
import CardContent from '@mui/material/CardContent';
import Typography from '@mui/material/Typography';
import {useEffect, useState} from "react";
import UserQuery from "./components/UserQuery";

function App() {
  const [data, setData] = useState(null);
  return (
      <div className="App">
        <header class="title" style={{ marginBottom: '10px'}}>
            Image Roulette
        </header>
        <UserQuery setData={setData} />
        {data && (
           <Card style={{ width: "50%", margin: "0 auto" }}>
                <CardMedia
                      component="img"
                      alt={data.alt_desc}
                      image={data.regular}
                      title={data.username}
                />
                <CardContent style={{ backgroundColor: 'white' }}>
                      <Typography gutterBottom variant="h5" component="h2">
                          {data.desc}
                      </Typography>
                      <Typography variant="subtitle2" color="gray" component="h6">
                          @{data.username}
                      </Typography>
                </CardContent>
           </Card>
          )}
      </div>
  );
}
export default App;