import './bootstrap';

// we need to make images folder available globally for when we run npm run build to not face issues
import.meta.glob([
    '../images/**'
]);
