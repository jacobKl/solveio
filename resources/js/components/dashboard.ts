import { Component } from "../types/interfaces";

class Dashboard implements Component {
    getKey(): string {
        return 'dashboard';
    }

    getComponent() {
        return () => ({
            onClick() {
                console.log('Hi!');
            }
        })
    }
}

export default Dashboard;
