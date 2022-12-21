import React, { useState } from 'react';
import TextField from '@mui/material/TextField';

function UserQuery(props) {
    const [query, setQuery] = useState('');
    const handleSearch = (event) => {
        event.preventDefault();
        fetch(`http://localhost/api/read.php?client_id=vebG0dLYa4T1dot7y2riaPTQxMznG81QevRU_k8AfBk&count=1&query=${query}`)
            .then(response => response.json())
            .then(data => {
                const username = data[0].user.username;
                const regular = data[0].urls.regular;
                const desc = data[0].description;
                const alt_desc = data[0].alt_description;
            props.setData({ username, regular, desc, alt_desc });
        });
    };
    return (
        <form onSubmit={handleSearch}>
            <TextField id="outlined-basic" label="Search by keyword" variant="outlined" style={{ width: '250px' }}
                       value={query}
                       onChange={(event) => setQuery(event.target.value)}
            />
            <button class= 'searchButton' style={{ width: '55px', height: '55px'}}>
                Go
            </button>
        </form>
    );
}
export default UserQuery;