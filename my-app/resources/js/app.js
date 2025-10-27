import './bootstrap';

window.Echo.channel('test-channel').listen('TestBroadcastEvent', () => {
    console.log('Hello Reverb!!');
});