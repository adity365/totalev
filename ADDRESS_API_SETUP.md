# Address API Setup Guide

## Dynamic Address Fields Integration

The jobseeker registration form now includes dynamic country, state, and city dropdowns that fetch data from an external API.

### API Setup

1. **Get Free API Key**: Visit [https://countrystatecity.in/](https://countrystatecity.in/) and sign up for a free API key.

2. **Replace API Key**: In the file `resources/views/frontend/index.blade.php`, find the JavaScript section and replace `YOUR_API_KEY_HERE` with your actual API key:

```javascript
headers: {
    'X-CSCAPI-KEY': 'YOUR_ACTUAL_API_KEY_HERE'
}
```

### Features

- **Cascading Dropdowns**: Country → State → City
- **Fallback Data**: If API fails, static data is used as fallback
- **Real-time Updates**: States and cities update automatically based on selection

### API Endpoints Used

- Countries: `https://api.countrystatecity.in/v1/countries`
- States: `https://api.countrystatecity.in/v1/countries/{country_code}/states`
- Cities: `https://api.countrystatecity.in/v1/countries/{country_code}/states/{state_code}/cities`

### Alternative APIs

If you prefer a different API, you can also use:
- [REST Countries API](https://restcountries.com/) (free, no key required)
- [GeoDB Cities API](https://rapidapi.com/wirefreethought/api/geodb-cities/) (requires RapidAPI key)

### Testing

1. Open the registration modal
2. Select a country
3. Verify states load automatically
4. Select a state
5. Verify cities load automatically

The form will work with fallback data even without the API key, but for the best experience, please set up the API key. 